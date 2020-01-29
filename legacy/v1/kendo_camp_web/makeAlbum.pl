# Makes a picture album from the *.JPG files from a digital camera.
# Uses files:
# pictureTemplate.html - html file that holds each picture.
# firstTemplate.html - html file that will point to the first picture of the
#                      slide show.
# captionTemplate.txt - file that controls the captions and the ordering of the
#                       pictures.

# Use genCaptions.pl to generate the captionTemplate.txt automatically from a 
# directory of *.JPG files, then edit it to add custom captions and change
# the ordering of the pictures.

# Edit the first html file in the slide show to remove the bad link to "prev"
# and edit the last html file in the slide show to remove the bad link to "next"

open (CAPTION_TEMPLATE, "captionTemplate.txt") or 
	die "Missing file:  captionTemplate.txt not found $:";
while($line = <CAPTION_TEMPLATE>) {
	chomp $line;
	# ignore blank lines and ones that start with a '#'	
	if($line and not $line =~ /^\#/) {  
		push @captions, $line;
	}
}

if(not (-e "html_album" and -d "html_album")) {
	mkdir html_album or die "Cannot make directory html_album $:";
}

open(FIRST_TEMPLATE, "firstTemplate.html") or
	die "Missing file: firstTemplate.html not found $:";
	
open(FIRST, ">html_album/first.html") or 
	die "Could not open html_album/first.html for writing $:";
	
($firstImage) = split(" ", $captions[0], 2);
while ($line = <FIRST_TEMPLATE>) {
	$imagepage = $firstImage;
	$imagepage =~ s/.JPG$//;	
	$imagepage = "html_album/picture_" . $imagepage . ".html";
	$line =~ s/!!FIRST/$imagepage/g;
	print FIRST $line;
}

close FIRST_TEMPLATE;
close FIRST;

open (PICTURE_TEMPLATE, "pictureTemplate.html") or
	die "Missing file: pictureTemplate.html not found $:";

while($line = <PICTURE_TEMPLATE>) {
	push @pictureTemplate, $line;
}
close PICTURE_TEMPLATE;

for($index = 0; $index < @captions; $index++) {
	($image, $caption) = split(" ", $captions[$index], 2);
	if($index < @captions + 1) {
		($prevImage) = split(" ", $captions[$index + 1], 2);
	}
	if($index > 0) {
		($nextImage) = split(" ", $captions[$index - 1], 2);
	}
	
	$imagepage = $image;
	$imagepage =~ s/.JPG$//;
	$imagepage = "html_album/picture_" . $imagepage . ".html";
	open(PICTURE_PAGE, ">$imagepage") or
		die "Could not open $imagepage for writing $:";
	foreach $line (@pictureTemplate) {
		$new = $line;
		$new =~ s/!!PICTURE/$image/g;
		if($caption) {
			$new =~ s/!!CAPTION/$caption/;
		}
		else {
			$new =~ s/!!CAPTION//;
		}
		if($nextImage) {
			$imagepage = $nextImage;
			$imagepage =~ s/.JPG$//;
			$imagepage = "picture_" . $imagepage . ".html";
			$new =~ s/!!PREVPICTURE/$imagepage/;
		}
		if($prevImage) {
			$imagepage = $prevImage;
			$imagepage =~ s/.JPG$//;
			$imagepage = "picture_" . $imagepage . ".html";
			$new =~ s/!!NEXTPICTURE/$imagepage/;
		}
		print PICTURE_PAGE $new;		
	}
	close PICTURE_PAGE;
}


# generates caption template.

opendir(THISDIR, ".") or die "serious dainbramage: $:!";
@allImages = sort grep { /.JPG$/ } readdir THISDIR;
open(CAPTION_TEMPLATE, ">captionTemplate.txt");
print CAPTION_TEMPLATE "# Lines beginning with '#' are comments\n\n";
foreach $image (@allImages) {
	print CAPTION_TEMPLATE "$image\n";
}
closedir THISDIR;

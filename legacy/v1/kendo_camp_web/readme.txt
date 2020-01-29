To generate the slide show from scratch:

Make sure you have files firstTemplate.html and pictureTemplate.html

They are html files, in which the following substitutions will be made:

!!PICTURE --> current picture in slide show,

!!PREVPICTURE --> page containing previous picture in slide show,

!!NEXTPICTURE --> page containing next picture in slide show.

!!CAPTION --> picture's caption.

!!FIRST --? page containing the first picture.


1. Run genCaptions.pl to generate captionTemplate.txt.  This will overwrite the old captionTemplate.txt, so make a backup of your old captions.  This will simply make a file a file name of each picture on a separate line.

2. (Optional) Edit captionTemplate.txt.  Add the desired caption after each file name, and change the order of the pictures if necessary.  Comment out pictures with '#'.

3. Run makeAlbum.pl to generate the webpages.  In the folder html_album, there will be first.html, which will point to the first item in the slide show.

4. Manually edit the first and last picture page to remove bad links to prev and next pictures, respectively.

More info (same thing) is in the comments in makeAlbum.pl.

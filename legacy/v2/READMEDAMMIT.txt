How to Easily Update the Site

OR

How to Update the Site and Not Make Everything Asplode

-Site Design Made in Oct 2005 by Erica Tam
-Readme Last Updated March 23, 2007

WHEN UPDATING THE OFFICERS PAGE:
President name/email on faq.php at very bottom needs to be changed.

If you make new buttons with the button template you MUST after making a gif, open that gif
and manually remove white crap in the corners or else it will look fucked up on the webpage.
Same goes with fudging with the main title image. You need to remove some of the edge crap.

Email addresses should be made into images. Use Tahoma Size 10 color #925CC2.

ADDING NEW PHOTOS:
Uber uber simple!

In the photos folder, if the year hasn't been made yet. Make a directory
with the current year. In that folder, make a folder for the event you 
have gotten folders for. Example, lets say you're adding photos for some
random event in 2006. The folder will be called:
04_Random_Event_Name_To_Appear_On_Photo_Page

Be sure to number! And underscores instead of spaces! They'll be converted
to appear on the page as spaces.

If you're adding photos for a year that hasn't been made, also be sure to
update the $year variable at the top of photos.php.

If you don't follow the photo naming convention you deserve to be tortured in a tar pit
with flying monkeys stabbing your eyes. (ie numbers, 01, 02, ...12,13..
and for thumbnails prefix the photo number with t-)

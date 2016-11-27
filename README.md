# Here to help?

I need help with the photo uploader on my index.html page.

Currently, when someone uploads a file, the original photo uploaded is sent to me, instead of the cropped/rotated square photo that is made by the cropit plugin found here: http://scottcheng.github.io/cropit/

What I need to happen: The cropped and rotated photo displayed through the square is currently a DATA URI. I need that data to be uploaded to the server so I know how the user cropped/rotated their image. Is it possible to convert the DATA URI into a "file input" that can be sent through the form using the upload.php action (fileToUpload is the name of the current file input). I would like to use the upload.php file because it took me forever to get the renaming to work so that I get a code on each photo that matches the code used to checkout on PayPal (plus the caption is stored there).

ALSO — In the future this will be expanded so that people can upload 1-8 photos. I'm not sure if that influences how the cropped/rotated photo is uploaded.

AND, there is some javascript/JQuery commented out that I was attempting to use to convert the DATA URI, may be useful?

If I can help you help me in any way, email me at jgraef3@kent.edu, or ask for my cell.

Thank you in advance :)


USEFUL LINKS about converting DATA URI to image file on server:
http://stackoverflow.com/questions/4998908/convert-data-uri-to-file-then-append-to-formdata

http://stackoverflow.com/questions/15675063/how-to-create-an-image-file-on-server-from-dataurl

http://stackoverflow.com/questions/6735414/php-data-uri-to-file

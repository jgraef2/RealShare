# RealShare
We make print sharing as easy as online sharing.

Here to help?

Currently, when someone uploads a file, the original photo upload to the "file input" html form is what is sent to me using the "upload.php" form action.

What I need to happen: The cropped and rotated photo displayed through the square is currently a DATA URI. I need that data to be uploaded to the server so I know how the user cropped/rotated their image. Is it possible to convert the DATA URI into a "file input" that be sent through the forms file input (fileToUpload is the name). 

ALSO — In the future this will be expanded so that people can upload 1-8 photos. I'm not sure if that influences how the cropped/rotated photo is uploaded.

FYI: The DATA URI is generated by the "cropit" plugin adopted from here: http://scottcheng.github.io/cropit/. 

AND, there is some javascript/JQuery commented out that I was attempting to use to convert the DATA URI.

Thank you in advance :)

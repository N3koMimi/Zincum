# This project is dead, use Frosco instead
you may wanna check https://github.com/lilbigdev/Frosco

# IMPORTANT NOTICE
this build wont work out of the box , it just has the basic functions 'they are not connected'
if you want to have a semi working build , then add a refresh header before the echos in the file boot/boot.php and it redirects to ../lib/libauth.php
then edit libauth.php and add a way to redirect to ../bin/bash.php (this is important as bash.php checks if you are authenitacted and checks your username)

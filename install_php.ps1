$url = "https://windows.php.net/downloads/releases/php-8.4.23-Win32-vs17-x64.zip"
$zipFile = "php-8.4.zip"
$dest = "php84"
Invoke-WebRequest -Uri $url -OutFile $zipFile
Expand-Archive -Path $zipFile -DestinationPath $dest -Force
Copy-Item "$dest\php.ini-development" "$dest\php.ini"
Add-Content "$dest\php.ini" "`nextension_dir = `"ext`"`n"
Add-Content "$dest\php.ini" "extension=curl`n"
Add-Content "$dest\php.ini" "extension=fileinfo`n"
Add-Content "$dest\php.ini" "extension=mbstring`n"
Add-Content "$dest\php.ini" "extension=openssl`n"
Add-Content "$dest\php.ini" "extension=pdo_sqlite`n"
Add-Content "$dest\php.ini" "extension=pdo_mysql`n"
Add-Content "$dest\php.ini" "extension=sqlite3`n"
Remove-Item $zipFile

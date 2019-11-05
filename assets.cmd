@echo off
call sass assets/styles.scss dist/styles.css --no-source-map
rd /S /Q C:\xampp\htdocs\basic\web\assets
mkdir C:\xampp\htdocs\basic\web\assets


@REM @echo off
@REM php -S localhost:8000
@REM start http://localhost:8000/%1
@REM pause

@echo off
set file=%1
php -S localhost:8000
start "" "http://localhost:8000/%file%"
pause

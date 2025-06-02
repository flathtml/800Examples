@echo off
SET MAVEN_HOME=C:\Daya\Maven\apache-maven-3.9.9
SET PATH=%MAVEN_HOME%\bin;%PATH%

REM Navigate to project directory
cd /d C:\Daya\JavaSpring\JSONValidator

REM Run Maven clean install
echo Building the Java Spring Boot project...
mvn clean install

IF %ERRORLEVEL% NEQ 0 (
    echo Build failed. Exiting.
    pause
    exit /b %ERRORLEVEL%
)

REM Start the Spring Boot application
echo Starting the Spring Boot REST API...
mvn spring-boot:run

pause

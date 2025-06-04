@echo off
REM Set Maven path temporarily for this session
set PATH=C:\Daya\Maven\apache-maven-3.9.9\bin;%PATH%

REM Change directory to your project root (adjust if needed)
cd /d C:\Daya\JavaSpring\JSONValidator
 

REM Clean and package the project with Maven
echo Running Maven clean package...
mvn clean package

REM Check if the build was successful
if errorlevel 1 (
    echo Maven build failed. Exiting.
    pause
    exit /b 1
)

REM Run the generated jar file (update jar name if different)
echo Running Spring Boot application...
java -jar target\policy-validator-1.0.0.jar

pause

set pathsave=%classpath%
set path=%path%;C:\j2sdk1.4.2_13\bin;C:\j2sdk1.4.2_13\jdk\bin
cd C:\Websites\irc\PJirc2.2.1\src
set classpath=%classpath%;C:\j2sdk1.4.2_13;C:\j2sdk1.4.2_13\bin;C:\Websites\irc\PJirc2.2.1\src
javac -g:none -O -target 1.1 -sourcepath C:\Websites\irc\PJirc2.2.1\src irc\gui\sbox\*.java 
jar cfm sbox.jar  META-INF/MANIFEST.MF  irc\gui\sbox\*.class  irc\tree\*.class
cabarc -p -r N sbox.cab irc\gui\sbox\*.class irc\tree\*.class
set classpath=%pathsave%
set pathsave= 
pause

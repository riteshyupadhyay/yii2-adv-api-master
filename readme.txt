
or create a new repository on the command line


Copy to clipboard 
echo "# yii2-adv-api-master" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/riteshyupadhyay/yii2-adv-api-master.git
git push -u origin master



…or push an existing repository from the command line


Copy to clipboard 
git remote add origin https://github.com/riteshyupadhyay/yii2-adv-api-master.git
git push -u origin master


======
 To commit local files
git init
git add .
git commit -m "initial commit"
                            
 Or to clone content that's already on the app
git clone https://demophpandsql1@hellodemophp.scm.azurewebsites.net:443/hellodemophp.git
3Add remote Windows Azure repository and push your stuff 

At the command prompt, change to the root directory for your app, and then type this command: 
git remote add azure https://demophpandsql1@hellodemophp.scm.azurewebsites.net:443/hellodemophp.git
git push azure master

http://classic.scottr.org/presentations/git-in-5-minutes/
==Git Error 
- ! [rejected]        master -> master (fetch first)
use :git push --force azure master

http://stackoverflow.com/questions/28429819/rejected-master-master-fetch-first
==Azure GIt
URL:https://demophpandsql1@yii2-adv-api-master.scm.azurewebsites.net:443/yii2-adv-api-master.git 

demophpandsql1/demophpandsql1
==
Ref:http://stackoverflow.com/questions/10804858/deploying-yii-on-windows-azure
https://azure.microsoft.com/en-in/documentation/articles/web-sites-configure/
http://knowledgebase.progress.com/articles/Article/How-to-move-azure-connection-string-to-web-config
==

<!--<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <connectionStrings>
        <add connectionString="server=uxivsywe3m.database.windows.net;User Id=ritesh4umca@gmail.com;database=hellodb;password=hello@db123" name="hellodb" providerName="MsSql.Data.MsSqlClient" />
    </connectionStrings>
    <system.webServer>
        <rewrite>
            <rules>
                <rule name="Yii2 WebApp Redirect" stopProcessing="true">
                    <match url="^$" />
                    <action type="Redirect" url="frontend/web" />
                </rule>
            </rules>
        </rewrite>
    </system.webServer>
</configuration>








http://www.yiiframework.com/wiki/696/key-web-server-settings-after-installing-a-fresh-yii-2-basic-or-advanced-app/

<?xml version="1.0" encoding="UTF-8"?>
<configuration>  
    <system.webServer>    
        <rewrite>      
            <rules>        
                <rule name="RewriteProductsUrl" enabled="true" stopProcessing="true">          
                    <match url="^products/([^/]+)/?$" />          
                        <conditions>            
                            <add input="{REQUEST_FILENAME}" matchType="IsFile" negate="true" />            
                            <add input="{REQUEST_FILENAME}" matchType="IsDirectory" negate="true" />          
                        </conditions>          
                        <action type="Rewrite" url="index.php?page=products&category={R:1}" />        
                </rule>      
            </rules>    
        </rewrite>  
    </system.webServer>
</configuration>

==
https://www.sitepoint.com/community/t/how-can-i-solve-this-web-config-problem/3240
<?php header("Content-Type: text/xml;"); ?>
<?php printf('<?xml version="1.0" ?>'); ?>

<page paging="true" nocache="false" output-encoding="UTF-8">
    <external type="css" file="rif.css" />
    <container>
        <column>
            <IMAGEHEADER id="header">
                <img src="header.jpg" alt="RIF Demo" href="index.php"/>
            </IMAGEHEADER>
            <TEXT>
                <styles>
                    <style name="link-color" value="#000000"/>
                </styles>
                <event type="onclick">
                    <action name="getRemoteBiscuit">
                        <param name="id" value="ajaxArticle"/>
                        <param name="page" value="news.php"/>
                        <param name="biscuitid" value="newsArticle" />
                        <param name="loadcontent" value="1" />
                    </action>
                </event>
                <headline>[url='news.php']News[/url]</headline>
            </TEXT>
            <ARTICLE id="ajaxArticle">
            </ARTICLE>
        </column>
    </container>
</page>

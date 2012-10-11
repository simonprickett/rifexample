<?php header("Content-Type: text/xml;"); ?>
<?php printf('<?xml version="1.0" ?>'); ?>

<page paging="true" nocache="false" output-encoding="UTF-8">
    <external type="css" file="rif.css" />
    <container>
        <column>
            <IMAGEHEADER id="header">
                <img src="header.jpg" alt="RIF Demo"/>
            </IMAGEHEADER>
            <TEXT>
                <headline>News</headline>
            </TEXT>
            <ARTICLE id="newsArticle">
                <headline>This is the Full Article</headline>
                <richtext>
                    This is the full article which was loaded from another page.[br]This was done using Netbiscuits Rich Internet Features.[br]This could contain a number of biscuits.[br][url='index.php']Back...[/url]
                </richtext>
            </ARTICLE>
        </column>
    </container>
</page>

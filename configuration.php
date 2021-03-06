<?php
    // ref: https://github.com/sjarvela/kloudspeaker/wiki/Backend-configuration-options
    $CONFIGURATION = array(
        "timezone" => "America/Chicago",
        "db" => array(
            "type" => "sqlite3",
            "file" => "/data/sqlite.db"
        ),
        "plugins" => array(
            "FileViewerEditor" => array(
                "viewers" => array(
                    "Image" => array("gif", "png", "jpg"),
                    "TextFile" => array("txt", "php", "html","log","properties","pmml")
                ),
                "previewers" => array(
                    "Image" => array("gif", "png", "jpg")
                ),
                "editors" => array(
                    "TextFile" => array("txt","properties","pmml")
                )
            )
        )
    );
?>
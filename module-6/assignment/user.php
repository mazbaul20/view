<?php
function showInfo($info){
    echo <<<DOC
        <div class="card">
            <img src="{$info[4]}" alt="{$info[4]}">
            <p>
                Time: {$info[0]}<br>
                Name: {$info[1]}<br>
                Email: {$info[2]}<br>
                Password: {$info[3]}<br>
            </p>
        </div>
    DOC;
}


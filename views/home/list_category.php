<?php
    echo '<div class="btn-group-vertical w-100" role="group" aria-label="Basic radio toggle button group">
    ';
    foreach ($categories as $category) {
        echo '    <input type="radio" class="btn-check category-check" name="category-options" id="'.$category->getCategoryID().'" autocomplete="off">
        <label class="btn btn-outline-secondary uppercase"  for="'.$category->getCategoryID().'">'.$category->getCategoryName().'</label>';

    }
    echo '</div>'; 

<div>
    <div>
		<?php
		the_date();
		?>
    </div>
    <div>
		<?php
		the_tags( "<span>", "</span><span>", "</span>" );
		?>
    </div>
    <div>
		<?php
		comments_number();
		?>
    </div>
    <div>
		<?php
		the_content();
		?>
    </div>
    <div>
		<?php
		comments_template();
		?>
    </div>
</div>
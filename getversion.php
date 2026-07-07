<?php
echo simplexml_load_file('manifest.xml')->xpath('/extension/version')[0];
<?php
session_start(); 

echo get_current_user(); 

echo exec('whoami');   
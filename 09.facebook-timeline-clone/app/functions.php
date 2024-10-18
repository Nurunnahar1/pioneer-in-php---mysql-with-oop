<?php
/**
 *   createAlert function
 * @param mixed $msg
 * @param mixed $type
 * @return string
 */

function createAlert($msg, $type = "danger")
{
    return " <p class=\" text-{$type}\">{$msg}</p>";
}

/**
 * Summary of message
 * @param mixed $msg
 * @param mixed $type
 * @return string
 */
function message($message, $type = "success")
{
    return "<p class=\"alert alert-{$type} d-flex justify-content-between\">
     {$message}
     <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
 </p>";
}

/**
 * Summary of old
 * @param mixed $field_name
 * @return mixed
 */
function old($field_name)
{
    return $_POST[$field_name] ?? '';
}

function reset_form()
{
    return $_POST = [];
}

/**
 * Summary of fileUpload
 * @param array $files
 * @param mixed $path
 * @return string
 */
function fileUpload(array $files, $path = "media/")
{
    $tmp_name = $files['tmp_name'];
    $file_name = $files['name'];

    //get file extension
    $file_array = explode('.', $file_name);
    $file_extension = strtolower(end($file_array));

    //file name unique
    $unique_file_name = time() . '_' . rand(100000, 100000000) . '.' . $file_extension;

    //upload file
    move_uploaded_file($tmp_name, $path . $unique_file_name);

    //return file name
    return $unique_file_name;
}

/**
 * Summary of createID
 * @param mixed $prefix
 * @return string
 */
function createID($prefix = 'USER')
{
    //current time
    $timestamp = time();

    //generate a random string
    $randomString = bin2hex(random_bytes(5));

    $uniqueID = $prefix . '_' . $timestamp . '_' . $randomString;

    return $uniqueID;
}

/**
 * Summary of timeAgo
 * @param mixed $timestamp
 * @return string
 */
function timeAgo($timestamp)
{
// Check if $timestamp is already a Unix timestamp (integer)
    if (!is_numeric($timestamp)) {
// Convert the timestamp to a Unix timestamp
        $timestamp = strtotime($timestamp);
    }

// If the timestamp conversion fails, return an error message
    if (!$timestamp) {
        return "Invalid date";
    }

// Get the current time and calculate the time difference
    $timeNow = time();
    $timeDifference = $timeNow - $timestamp;

// Define time periods in seconds
    $seconds = $timeDifference;
    $minutes = round($timeDifference / 60);
    $hours = round($timeDifference / 3600);
    $days = round($timeDifference / 86400);
    $weeks = round($timeDifference / 604800);
    $months = round($timeDifference / 2629440);
    $years = round($timeDifference / 31553280);

// Determine which period to use
    if ($seconds <= 60) {return "just now";} elseif ($minutes <= 60) {return ($minutes == 1) ? "1 minute ago"
        : "$minutes minutes ago";} elseif ($hours <= 24) {return ($hours == 1) ? "1 hour ago" : "$hours hours ago";} elseif ($days <= 7) {return ($days == 1) ? "yesterday" : "$days days ago";} elseif ($weeks <= 4) {return ($weeks == 1)
        ? "1 week ago" : "$weeks weeks ago";} elseif ($months <= 12) {return ($months == 1) ? "1 month ago"
        : "$months months ago";} else {return ($years == 1) ? "1 year ago" : "$years years ago";}
}

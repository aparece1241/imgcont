<?php
    class Response {
        function __construct($data, $status, $error, $message) {
            return [
                'data' => $data,
                'status' => $status,
                'is_error' => $error,
                'message' => $message
            ];
        }
    }

?>

<?php

session_start();
include 'config.php';
include 'connection.php';
$conn = Connect();



$productSaved = FALSE;

if (isset($_POST['submit'])) {
    /*
     * Read posted values.
     */
    $id = isset ($_POST['id']) ? $_POST['id'] : '';
    $product_name = isset($_POST['name']) ? $_POST['name'] : '';
    $product_price = isset($_POST['product_price']) ? $_POST['product_price'] : '';
    $product_qty = isset($_POST['product_qty']) ? $_POST['product_qty'] : '';
    $product_code = isset($_POST['product_code']) ? $_POST['product_code'] : 0;
    $product_image = isset($_POST['product_image']) ? $_POST['product_image'] : '';

    /*
     * Validate posted values.
     */
    if (empty($product_name)) {
        $errors[] = 'Please provide a product name.';
    }

    // if ($product_qty == 0) {
    //     $errors[] = 'Please provide the quantity.';
    // }

    // if (empty($product_code)) {
    //     $errors[] = 'Please provide a description.';
    // }

    /*
     * Create "uploads" directory if it doesn't exist.
     */
    if (!is_dir(UPLOAD_DIR)) {
        mkdir(UPLOAD_DIR, 0777, true);
    }

    /*
     * List of file names to be filled in by the upload script 
     * below and to be saved in the db table "products_images" afterwards.
     */
    $filenamesToSave = [];

    $allowedMimeTypes = explode(',', UPLOAD_ALLOWED_MIME_TYPES);

    /*
     * Upload files.
     */
    if (!empty($_FILES)) {
        if (isset($_FILES['file']['error'])) {
            foreach ($_FILES['file']['error'] as $uploadedFileKey => $uploadedFileError) {
                if ($uploadedFileError === UPLOAD_ERR_NO_FILE) {
                    $errors[] = 'You did not provide any files.';
                } elseif ($uploadedFileError === UPLOAD_ERR_OK) {
                    $uploadedFileName = basename($_FILES['file']['name'][$uploadedFileKey]);

                    if ($_FILES['file']['size'][$uploadedFileKey] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['file']['type'][$uploadedFileKey];
                        $uploadedFileTempName = $_FILES['file']['tmp_name'][$uploadedFileKey];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $filenamesToSave[] = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
            }
        }
    }

    /*
     * Save product and images.
     */
    if (!isset($errors)) {
        /*
         * The SQL statement to be prepared. Notice the so-called markers, 
         * e.g. the "?" signs. They will be replaced later with the 
         * corresponding values when using mysqli_stmt::bind_param.
         * 
         * @link http://php.net/manual/en/mysqli.prepare.php
         */
        $sql = 'INSERT INTO product (
            id,
            name,
            price,
            quantity,
            code,
            image
        ) VALUES (
            ?, ? , ? , ? , ? ,?
        )';

        /*
         * Prepare the SQL statement for execution - ONLY ONCE.
         * 
         * @link http://php.net/manual/en/mysqli.prepare.php
         */
        // $statement = $connection->prepare($sql);

        /*
         * Bind variables for the parameter markers (?) in the 
         * SQL statement that was passed to prepare(). The first 
         * argument of bind_param() is a string that contains one 
         * or more characters which specify the types for the 
         * corresponding bind variables.
      ion   * 
         * @link http://php.net/manual/en/mysqli-stmt.bind-param.php
         */
        // $statement->bind_param('isiiis', $id, $product_name, $product_price , $product_qty , $product_code , $product_image);
        /*
         * Execute the prepared SQL statement.
         * When executed any parameter markers which exist will 
         * automatically be replaced with the appropriate data.
         * 
         * @link http://php.net/manual/en/mysqli-stmt.execute.php
        //  */
        // $statement->execute();

        // Read the id of the inserted product.
        // $id = $connection->id;

        /*
         * Close the prepared statement. It also deallocates the statement handle.
         * If the statement has pending or unread results, it cancels them 
         * so that the next query can be executed.
         * 
         * @link http://php.net/manual/en/mysqli-stmt.close.php
         */
        // $statement->close();

        /*
         * Save a record for each uploaded file.
         */
        foreach ($filenamesToSave as $filename) {
            $sql = 'INSERT INTO product_images (
                        id,
                        filename
                    ) VALUES (
                        ?, ?
                    )';

            // $statement = $connection->prepare($sql);

            // $statement->bind_param('is', $id, $filename);

            // $statement->execute();

            // $statement->close();
        }

        /*
         * Close the previously opened database connection.
         * 
         * @link http://php.net/manual/en/mysqli.close.php
         */
        // $connection->close();

        // $productSaved = TRUE;

        /*
         * Reset the posted values, so that the default ones are now showed in the form.
         * See the "value" attribute of each html input.
         */
          
        $productName = $productQuantity = $productDescription = NULL;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
        <meta charset="UTF-8" />
        <!-- The above 3 meta tags must come first in the head -->

        <title>Save product details</title>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
        <style type="text/css">
            body {
                padding: 30px;
            }

            .form-container {
                margin-left: 80px;
            }

            .form-container .messages {
                margin-bottom: 15px;
            }

            .form-container input[type="text"],
            .form-container input[type="number"] {
                display: block;
                margin-bottom: 15px;
                width: 150px;
            }

            .form-container input[type="file"] {
                margin-bottom: 15px;
            }

            .form-container label {
                display: inline-block;
                float: left;
                width: 100px;
            }

            .form-container button {
                display: block;
                padding: 5px 10px;
                background-color: #8daf15;
                color: #fff;
                border: none;
            }

            .form-container .link-to-product-details {
                margin-top: 20px;
                display: inline-block;
            }
        </style>

    </head>
    <body>

        <div class="form-container">
            <h2>Add a product</h2>

            <div class="messages">
                <?php
                if (isset($errors)) {
                    echo implode('<br/>', $errors);
                } elseif ($productSaved) {
                    echo 'The product details were successfully saved.';
                }
                ?>
            </div>

            <form action="addProduct.php" method="post" enctype="multipart/form-data">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo isset($product_name) ? $product_name : ''; ?>">

                <form action="addProduct.php" method="post" enctype="multipart/form-data">
                <label for="name">Product ID</label>
                <input type="text" id="name" name="name" value="<?php echo isset($id) ? $id  : ''; ?>">

                <form action="addProduct.php" method="post" enctype="multipart/form-data">
                <label for="name">Price</label>
                <input type="text" id="name" name="name" value="<?php echo isset($product_price) ? $product_price : ''; ?>">

                <form action="addProduct.php" method="post" enctype="multipart/form-data">
                <label for="name">Product Code</label>
                <input type="text" id="name" name="name" value="<?php echo isset($product_code) ? $product_code : ''; ?>">

                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="0" value="<?php echo isset($product_qty) ? $product_qty  : '0'; ?>">

                <label for="file">Images</label>
                <input type="file" id="file" name="file[]" multiple>

                <button type="submit" id="submit" name="submit" class="button">
                    Submit
                </button>
            </form>
            <?php
            if ($productSaved) {
                ?>
                <a href="getProduct.php?id=<?php echo $id; ?>" class="link-to-product-details">
                    Click me to see the saved product details in <b>getProduct.php</b> (product id: <b><?php echo $id; ?></b>)
                </a>
                <?php
            }
            ?>
        </div>

    </body>
</html>
<form method="post" action="process.php">
    <div id="item-container">
        <div class="form-group item">
            <input type="text" name="titles[]" class="form-control" placeholder="Enter title" required>
            <input type="text" name="links[]" class="form-control" placeholder="Enter link" required>
            <button type="button" class="btn btn-danger remove-item">Remove</button>
        </div>
    </div>
    <button type="button" id="add-item" class="btn btn-primary">Add Item</button>
    <br><br>
    <input type="submit" class="btn btn-success" value="Submit">
</form>
<script>
        $(document).ready(function() {
            // Add item
            $("#add-item").click(function() {
                var newItem = '<div class="form-group item"><input type="text" name="titles[]" class="form-control" placeholder="Enter title" required><input type="text" name="links[]" class="form-control" placeholder="Enter link" required><button type="button" class="btn btn-danger remove-item">Remove</button></div>';
                $("#item-container").append(newItem);
            });

            // Remove item
            $(document).on("click", ".remove-item", function() {
                $(this).closest(".item").remove();
            });
        });
    </script>
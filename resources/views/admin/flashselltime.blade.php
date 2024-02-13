<!-- Assuming you're in your view file, e.g., create.blade.php -->
<form action="" method="POST">
  @csrf

  <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" required>
  </div>

  <!-- Add other product fields here -->

  <div class="form-group">
      <label for="flash_sell_end">Flash Sale End Time</label>
      <input type="datetime-local" name="flash_sell_end" id="flash_sell_end" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Create Product</button>
</form>




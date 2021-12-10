<!-- Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do you want to revoke access for <name id="deleteModalName">test</name>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="" method="post">
          <input type="text" id="deleteIdValue" name="deleteIdValue" hidden>
          <button type="submit" class="btn btn-danger" name ="deleteUser">Delete User</button>
        </form>
      </div>
    </div>
  </div>
</div>
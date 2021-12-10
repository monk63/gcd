<!-- Modal -->
<div class="modal fade" id="restoreuserModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Restore User?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do you want to revoke access for <name id="restoreModalName"></name>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="" method="post">
          <input type="text" id="restoreIdValue" name="restoreIdValue" hidden>
          <button type="submit" class="btn btn-success" name ="restoreUser">Restore User</button>
        </form>
      </div>
    </div>
  </div>
</div>
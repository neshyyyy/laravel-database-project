<div class="modal fade py-5" tabindex="-1" role="dialog" id="modaldelete">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-4 text-center">
        <h5 class="mb-0">Are you sure?</h5>
        <p class="mb-0">once delete unable to retrieve</p>
      </div>
      <div class="modal-footer flex-nowrap p-0">
        <button type="button"  onclick="window.location.href='/userdelete?rid={{ $user->id }}'" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"><strong>Yes, Delete</strong></button>
        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal">No thanks</button>
      </div>
    </div>
  </div>
</div>
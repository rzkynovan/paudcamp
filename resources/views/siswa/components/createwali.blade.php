<div class="modal modal-blur fade" id="create-wali" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lengkapi Data Wali</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  <form action="{{ route('wali.store') }}" method="post">
      @csrf
      <input type="hidden" name="siswa_id" value="{{ Auth::user()->id }}">

      <div class="modal-body">
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap">
      </div>
      
      <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com">
      </div>
    
        <div class="row">
            <div class="col-lg-2">
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Code</label>
                    <input type="text" class="form-control" disabled value="+62">
                </div>
              </div>
              <div class="col-lg-10">
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor Hp</label>
                    <input type="tel" name="no_hp" id="no_hp" class="form-control" placeholder="8123456789">
                </div>
              </div>
        </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="mb-3">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-lg-12">
          <label for="alamat" class="form-label">Alamat Wali</label>
          <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
      </div>
    </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
          Cancel
        </a>
        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
          <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
          Create new report
        </button>
      </div>
    </div>
  </form>
  </div>
</div>
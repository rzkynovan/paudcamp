<table class="table table-vcenter table-mobile-md card-table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Join at</th>
        <th>Role</th>
        <th class="w-1"></th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td colspan="5" class="text-center">
          <h3>Data Siswa</h3>
        </td>
      </tr>
      @forelse ($siswa as $item)    
      <tr>
        <td data-label="Name" >
          <div class="d-flex py-1 align-items-center">
            <span class="avatar me-2" style="background-image: url({{ asset( $item -> avatar ) }})"></span>
            <div class="flex-fill">
              <div class="font-weight-medium">{{ $item->name }}</div>
              <div class="text-muted"><a href="#" class="text-reset">{{ $item->email }}</a></div>
            </div>
          </div>
        </td>
        <td data-label="Join" >
          {{-- <div>VP Sales</div> --}}
          <div class="text-muted">{{ $item ->email_verified_at }}</div>
        </td>
        <td class="text-muted" data-label="Role" >
          {{ $item ->role }}
        </td>
        <td>
          <div class="btn-list flex-nowrap">
            <a href="#" class="btn">
              Edit
            </a>
            <div class="dropdown">
              <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                Actions
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#" onclick="return confirm('are you sure to delete?')">
                  Delete
                </a>
                <a class="dropdown-item" target="_blank" href="https://wa.me/62{{ $item -> phone_number }}">
                  Send Massage
                </a>
              </div>
            </div>
          </div>
        </td>
      </tr>
      @empty
      <tr>
          <td colspan="5" class="text-center">
              <h3 class="text-danger">Anda Belum Melengkapi Data</h3>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report">
                Lengkapi !
              </a>
              @include('siswa.components.createsiswa')
          </td>
      </tr>
      @endforelse
      <tr>
        <td colspan="5" class="text-center">
          <h3>Data Wali</h3>
        </td>
      </tr>
      @forelse ($wali as $item)    
      <tr>
        <td data-label="Name" >
          <div class="d-flex py-1 align-items-center">
            <span class="avatar me-2" style="background-image: url({{ asset( $item -> avatar ) }})"></span>
            <div class="flex-fill">
              <div class="font-weight-medium">{{ $item->name }}</div>
              <div class="text-muted"><a href="#" class="text-reset">{{ $item->email }}</a></div>
            </div>
          </div>
        </td>
        <td data-label="Join" >
          {{-- <div>VP Sales</div> --}}
          <div class="text-muted">{{ $item ->email_verified_at }}</div>
        </td>
        <td class="text-muted" data-label="Role" >
          {{ $item ->role }}
        </td>
        <td>
          <div class="btn-list flex-nowrap">
            <a href="#" class="btn">
              Edit
            </a>
            <div class="dropdown">
              <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                Actions
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#" onclick="return confirm('are you sure to delete?')">
                  Delete
                </a>
                <a class="dropdown-item" target="_blank" href="https://wa.me/62{{ $item -> phone_number }}">
                  Send Massage
                </a>
              </div>
            </div>
          </div>
        </td>
      </tr>
      @empty
      <tr>
          <td colspan="5" class="text-center">
              <h3 class="text-danger">Anda Belum Melengkapi Data</h3>
              <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-wali">
                Lengkapi !
              </a>
              @include('siswa.components.createwali')
          </td>
      </tr>
      @endforelse
    </tbody>


  </table>

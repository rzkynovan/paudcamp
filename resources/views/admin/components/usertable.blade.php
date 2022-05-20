<table class="table table-vcenter table-mobile-md card-table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Join at</th>
        <th>Role</th>
        <th class="w-1"></th>
      </tr>
    </thead>
    @foreach ($users as $user)
        
    
    <tbody>
      <tr>
        <td data-label="Name" >
          <div class="d-flex py-1 align-items-center">
            <span class="avatar me-2" style="background-image: url({{ asset( $user -> avatar ) }})"></span>
            <div class="flex-fill">
              <div class="font-weight-medium">{{ $user->name }}</div>
              <div class="text-muted"><a href="#" class="text-reset">{{ $user->email }}</a></div>
            </div>
          </div>
        </td>
        <td data-label="Join" >
          {{-- <div>VP Sales</div> --}}
          <div class="text-muted">{{$user -> email_verified_at }}</div>
        </td>
        <td class="text-muted" data-label="Role" >
          {{ $user -> role }}
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
                <a class="dropdown-item" target="_blank" href="https://wa.me/{{ $user -> phone_number }}">
                  Send Massage
                </a>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
    @endforeach
    {{ $users -> links() }}
  </table>
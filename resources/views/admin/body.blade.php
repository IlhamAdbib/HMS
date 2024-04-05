<div class="container mx-auto">
  <div class="row mt-8" >
      <!-- First Pair of Statistics -->
      <div class="col-lg-9 mb-6 ml-4">
          <!-- Number of Doctors -->
          <div class="card h-100 border-left-info">
              <div class="card-body mb-4"> <!-- Added mb-4 for bottom margin -->
                  <div class="row align-items-center">
                      <div class="col">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Number of Doctors</div>
                          <div class="h5 mb-0 font-weight-bold">{{ $numDoctors }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-user-md fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-9 mb-6 ml-4 ">
          <!-- Number of Appointments Not Treated (In Progress) -->
          <div class="card h-100 border-left-danger">
              <div class="card-body mb-4"> <!-- Added mb-4 for bottom margin -->
                  <div class="row align-items-center">
                      <div class="col">
                          <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Appointments Not Treated</div>
                          <div class="h5 mb-0 font-weight-bold">{{ $numAppointmentsInProgress }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-exclamation-circle fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row mt-8 ">
      <!-- Second Pair of Statistics -->
      <div class="col-lg-9 mb-6 ">
          <!-- Number of Approved Appointments -->
          <div class="card h-100 border-left-success">
              <div class="card-body mb-4"> <!-- Added mb-4 for bottom margin -->
                  <div class="row align-items-center">
                      <div class="col">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Approved Appointments</div>
                          <div class="h5 mb-0 font-weight-bold">{{ $numApprovedAppointments }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-9 mb-6">
          <!-- Number of Canceled Appointments -->
          <div class="card h-100 border-left-warning">
              <div class="card-body mb-4"> <!-- Added mb-4 for bottom margin -->
                  <div class="row align-items-center">
                      <div class="col">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Canceled Appointments</div>
                          <div class="h5 mb-0 font-weight-bold">{{ $numCanceledAppointments }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-times-circle fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

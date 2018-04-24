 <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{URL::to('/')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user-circle"></i>
            <span class="nav-link-text">Students</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="{{URL::to('/student/create')}}"><i class="fa fa-user-plus"></i> Add student</a>
            </li>
            <li>
              <a href="{{URL::to('/student')}}">View students</a>
            </li>
          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Subject</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents2">
            <li>
              <a href="{{URL::to('/subject/create')}}">Add Subject </a>
            </li>
            <li>
              <a href="{{URL::to('/subject')}}">View Subject</a>
            </li>
          </ul>
        </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
             <i class="fa fa-fw fa-align-justify"></i>
             <span class="nav-link-text">Exam</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents3">
             <li>
                 <a href="{{URL::to('/exam/create')}}">Exam Add</a>
             </li>
             <li>
                 <a href="{{URL::to('/exam')}}">Exam List</a>
             </li>
         </ul>
     </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion">
             <i class="fa fa-fw fa-table"></i>
             <span class="nav-link-text">Mark</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents4">
             <li>
                 <a href="{{URL::to('/mark/create')}}">Mark Add</a>
             </li>
             <li>
                 <a href="{{URL::to('/mark')}}">Mark List</a>
             </li>
         </ul>
     </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5" data-parent="#exampleAccordion">
             <i class="fa fa-fw fa-user-plus"></i>
             <span class="nav-link-text">Teachers</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents5">
             <li>
                 <a href="{{URL::to('/teachers/create')}}">Add Teacher</a>
             </li>
             <li>
                 <a href="{{URL::to('/teachers')}}">Teacher's List</a>
             </li>
         </ul>
     </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents6" data-parent="#exampleAccordion">
             <i class="fa fa-fw fa-user-plus"></i>
             <span class="nav-link-text">Attendance</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents6">
             <li>
                 <a href="{{URL::to('/attendence/create')}}">Add Attendance</a>
             </li>
             <li>
                 <a href="{{URL::to('/attendence')}}">Attendance List</a>
             </li>
         </ul>
     </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents7" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-pencil-square-o"></i>
            <span class="nav-link-text">Addmission</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents7">
            <li>
                <a href="{{URL::to('/admission/show')}}">View Candidate list</a>
            </li>
          </ul>
        </li>

      </ul>
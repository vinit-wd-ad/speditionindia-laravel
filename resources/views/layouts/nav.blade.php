<ul>
    <li class="current-menu-ancestor"><a href="{{ url('/') }}">Home</a></li>

    <li class="has-dropdown">
        <a href="#">Who We Are</a>
        <ul class="sub-menu">
            <li><a href='{{ url('about-us') }}'>About Us</a></li>
            <li><a href="{{ url('mission-vision') }}">Our Mission & Vision</a></li>
            <li><a href='{{ url('our-team') }}'>Our Core Team</a></li>
            <li><a href='{{ url('associated-members') }}'>Associated Members</a></li>
            <li><a href='{{ url('affiliation-certification') }}'>Affiliation Certification</a></li>
            <li><a href='{{ url('our-group-companies') }}'>Our Group Companies</a></li>
            <li><a href='{{ url('gallery') }}'>Gallery</a></li>
        </ul>
    </li>

    <li class="has-dropdown">
        <a href="#">Our Offerings</a>
        <ul class="sub-menu">
            <li class="has-dropdown">
                <a href="{{ url('freight-management') }}">Freight Management</a>
                <ul class="sub-menu">
                    <li><a href="{{ url('air-freight') }}">Air Freight</a></li>
                    <li><a href="{{ url('ocean-freight') }}">Sea Freight</a></li>
                    <li><a href="{{ url('ground-freight') }}">Ground Freight</a></li>
                    <li><a href="{{ url('multi-model-solutions') }}">Multi-Modal Solutions</a></li>
                    <li><a href="{{ url('transport-optimization') }}">Transport Optimization</a></li>
                </ul>
            </li>
            <li><a href='{{ url('time-critical-logistics') }}'>Time-Critical Logistics</a></li>
            <li><a href='{{ url('customs-management') }}'>Customs Management</a></li>
            <li><a href='{{ url('project-logistics') }}'>Project Cargo</a></li>
            <li><a href='{{ url('express-courier') }}'>Express Courier</a></li>
            <li><a href='{{ url('industrial-solutions') }}'>Industrial Solutions</a></li>
        </ul>
    </li>

    <li class="has-dropdown">
        <a href="#">Priority Services</a>
        <ul class="sub-menu">
            <li><a href='{{ url('exhibition-events-logistics') }}'>Exhibition & Events Logistics</a></li>
            <li><a href='{{ url('aviation-cargo-handling') }}'>Aviation Cargo Handling</a></li>
            <li><a href='{{ url('dangerous-goods-handling') }}'>Dangerous Goods Handling</a></li>
            <li><a href='{{ url('pet-relocation') }}'>Pet Relocation</a></li>
        </ul>
    </li>

    <li class="has-dropdown">
        <a href="#">Moment & Workstyle</a>
        <ul class="sub-menu">
            @if (isset($momentProjects) && $momentProjects->count() > 0)
                @foreach ($momentProjects as $project)
                    <li class="@if ($project->children->count() > 0) has-dropdown @endif">
                        {{-- Yahan route change kiya hai --}}
                        <a href="{{ route('moment-workstyle.show', $project->slug) }}">{{ $project->name }}</a>

                        @if ($project->children->count() > 0)
                            <ul class="sub-menu">
                                @foreach ($project->children as $child)
                                    <li><a
                                            href="{{ route('moment-workstyle.show', $child->slug) }}">{{ $child->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @endif
        </ul>
    </li>

    <li><a href='{{ url('career') }}'>Career</a></li>
    <li><a href='{{ url('news-events') }}'>News & Events</a></li>
    <li><a href='{{ url('blogs') }}'>Blogs</a></li>
</ul>

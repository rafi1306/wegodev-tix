<nav class="nav flex-column">
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @foreach($list AS $row) 
        <a href="#" class="nav-link {{ $isActive($row['label']) ? 'active' : '' }}">
        {{ $row['label'] }}
        </a>
    @endforeach
</nav>
@php
    $breadcrumbs = [
        ['label' => 'Dashboard', 'url' => route('admin.dashboard')],
    ];

    if (request()->routeIs('admin.customer.*')) {
        if (request()->routeIs('admin.customer.index')) {
            $breadcrumbs[] = ['label' => 'Data Pelanggan', 'url' => null];
        } else {
            $breadcrumbs[] = ['label' => 'Data Pelanggan', 'url' => route('admin.customer.index')];

            if (request()->routeIs('admin.customer.create')) {
                $breadcrumbs[] = ['label' => 'Tambah Pelanggan', 'url' => null];
            } elseif (request()->routeIs('admin.customer.edit')) {
                $breadcrumbs[] = ['label' => 'Edit Pelanggan', 'url' => null];
            } elseif (request()->routeIs('admin.customer.show')) {
                $breadcrumbs[] = ['label' => 'Detail Pelanggan', 'url' => null];
            }
        }
    }
@endphp

<nav class="admin-breadcrumbs" aria-label="Breadcrumb">
    <ol>
        @foreach ($breadcrumbs as $breadcrumb)
            <li @if (is_null($breadcrumb['url'])) aria-current="page" @endif>
                @if ($breadcrumb['url'])
                    <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a>
                @else
                    <span>{{ $breadcrumb['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Temmen Care')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto relative h-full">
        @yield('content')
        @yield('bottom-menu')
    </div>
</body>
@include('sweetalert::alert')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all buttons with data-modal attribute
        const buttonsCOnsult = document.querySelectorAll('[data-modal-consult]');

        buttonsCOnsult.forEach(button => {
            button.addEventListener('click', async function() {
                const modalContent = JSON.parse(this.getAttribute('data-modal-consult'));

                const {
                    value: text
                } = await Swal.fire({
                    input: 'textarea',
                    inputLabel: 'Ceritakan Keluhan mu',
                    inputPlaceholder: 'Saya mengalami...',
                    showCancelButton: false,
                    confirmButtonText: 'Kirim'
                });

                if (text && modalContent['schedule_id']) {
                    const result = await Swal.fire({
                        title: 'Anda yakin konsultasi?',
                        showCancelButton: true,
                        confirmButtonText: 'Yakin'
                    });

                    if (result.isConfirmed) {
                        fetch('/psycholog', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    schedule_id: modalContent['schedule_id'],
                                    reason: text
                                })
                            })
                            .then(data => {
                                Swal.fire('Berhasil Atur Jadwal!');
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                Swal.fire('Error',
                                    'There was an error submitting your message',
                                    'error');
                            });
                    }
                }
            });
        });

        const buttons = document.querySelectorAll('[data-modal]');
        buttons.forEach(button => {
            button.addEventListener('click', async function() {
                const modalContent = JSON.parse(this.getAttribute('data-modal'));

                const {
                    value: text
                } = await Swal.fire({
                    input: 'textarea',
                    inputLabel: 'Laporan Anda',
                    inputPlaceholder: 'Saya mengalami...',
                    inputAttributes: {
                        'aria-label': modalContent.ariaLabel
                    },
                    showCancelButton: false,
                    confirmButtonText: 'Kirim'
                });

                if (text) {
                    const result = await Swal.fire({
                        title: 'Anda yakin ingin melaporkan?',
                        showCancelButton: true,
                        confirmButtonText: 'Yakin'
                    });

                    if (result.isConfirmed) {
                        fetch('/report', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    report: text
                                })
                            })
                            .then(data => {
                                Swal.fire('Berhasil Lapor!');
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                Swal.fire('Error',
                                    'There was an error submitting your message',
                                    'error');
                            });
                    }
                }
            });
        });
    });
</script>

</html>

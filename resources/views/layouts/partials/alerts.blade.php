<script>
    Swal.fire({
        draggable: true,
        showCloseButton: true,
        background: '#ffc107',
        imageUrl: "{{ asset('assets/images/icons/logo.png') }}",
        imageHeight: 150,
        customClass: {
            image: "animate__animated animate__rollIn animate__infinite"
        },
        title: "<label class='py-2'>Excluir Conta?</label>",
        text: "Tem certeza que deseja excluir sua conta? Essa ação é irreversível.",
        showConfirmButton: false,
        footer: "<div class='d-flex'>" +
                    "<a href='' class='btn btn-danger border-black focus-ring focus-ring-danger me-1'>" +
                        "<iconify-icon icon='boxicons:dislike-filled' class='animate__animated animate__tada animate__infinite'></iconify-icon>" +
                        "CANCELAR" +
                    "</a>" +
                    "<form action='{{ route('delete', session('id')) }}' method='post'>" +
                        "<input type='hidden' name='_token' value='{{ csrf_token() }}'>" +
                        "<input type='hidden' name='_method' value='DELETE'>" +
                        "<button type='submit' class='btn btn-success border-black focus-ring focus-ring-success'>" +
                            "<iconify-icon icon='streamline-plump-color:like-1' class='animate__animated animate__tada animate__infinite'></iconify-icon>" +
                            "CONFIRMAR" +
                        "</button>" +
                    "</form>" +
                "</div>",
        showClass: {
            popup: `
                animate__animated
                animate__fadeInUp
                animate__faster
            `
        },
        hideClass: {
            popup: `
                animate__animated
                animate__fadeOutDown
                animate__faster
            `
        },
        backdrop: `
            rgba(0, 0, 0, 0.4)
            url("/images/nyan-cat.gif")
            left top
            no-repeat
        `,
    });
</script>
export function createCategory() {
    return {
        formData: {
            token: "{{ csrf_token() }}",
            name: '',
            debit: true
        },

        storeCategory() {
            axios.post("{{ route('category.store') }}")
                .then((response) => {
                })
        }
    }
}

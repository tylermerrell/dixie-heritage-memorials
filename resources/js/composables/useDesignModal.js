import { ref } from 'vue';

const showModal = ref(false);

export function useDesignModal() {
    return {
        showModal,
        openModal: () => (showModal.value = true),
        closeModal: () => (showModal.value = false),
    };
}

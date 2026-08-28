import { onMounted, onUnmounted } from 'vue';

export function useJsonLd(data) {
  let el = null;

  onMounted(() => {
    el = document.createElement('script');
    el.type = 'application/ld+json';
    el.textContent = JSON.stringify(data);
    document.head.appendChild(el);
  });

  onUnmounted(() => {
    el?.remove();
  });
}

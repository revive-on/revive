<template>
  <div>
    <h4 class="mb-6">
      Application log
    </h4>

    <div class="relative" style="height: calc(100vh - 16rem)">
      <terminal
              ref="terminal"
              class="card h-full"
              :text="lines || placeholder"
      ></terminal>
    </div>
  </div>
</template>

<script>
  import Terminal from './Terminal';
  import LogReader from '../../lib/LogReader';
  export default {
    data: () => ({
      lines: '',
      placeholder: 'Listening',
    }),
    components: {
      Terminal,
    },
    mounted() {
      this.logReader = new LogReader({ callback: this.addLines });
    },
    beforeDestroy() {
      this.logReader.destroy();
    },
    methods: {
      addLines(lines) {
        this.lines += lines;
        if (!this.lines) {
          this.updatePlaceholder();
        }
      },
      updatePlaceholder() {
        this.placeholder = this.placeholder.length > 11 ? 'Listening.' : this.placeholder + '.';
      },
    },
  };
</script>
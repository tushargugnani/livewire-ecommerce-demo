<div x-data="{
    selected: [],
        toggle(event){
           var collapseRef = event.currentTarget.getAttribute('aria-controls');
           if(!this.selected.includes(collapseRef)){
               this.selected.push(collapseRef);
           }else{
                this.selected.splice(this.selected.indexOf(collapseRef), 1);
           }
        },
        isAccordionOpen(collapseRef){
            return this.selected.includes(collapseRef) ? true : false;
        },
        defaultOpen(collapseRef){
            this.selected.push(collapseRef);
        }
      }"
  @keydown.space.prevent.stop="toggle"
  >
  {{$slot}}
</div>
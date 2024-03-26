


window.addEventListener('DOMContentLoaded', function () {
    Livewire.hook('morph.updated', ({ el, component }) => {
        const message = this.document.querySelector('#message');
        if (message) {
            setTimeout(() => {
                message.style.display = 'none';
            }, 5000);
        }

    });

});

window.addEventListener('livewire:init', function () {
    Livewire.on('createClose', (event) => {
        $('#createModal').modal('toggle');
    });

    Livewire.on('editClose',(event)=>{
        $('#editSkills').modal('toggle');
    })

    Livewire.on('DeleteModal', (event)=>{
        $('#deleteSkill').modal('toggle');
    });

    Livewire.on('showModal', (event)=>{
        $('#showSkill').modal('toggle');
    })
})
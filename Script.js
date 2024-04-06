// ...................start swiper story...............
let swiper = new Swiper(".mySwiper",{
    slidesPerView: 6,
    spaceBetween: 5,
});

//..................Window scroll...................
window.addEventListener('scroll',()=>{
    document.querySelector('.profile-popup').style.display='none'
    document.querySelector('.add-post-popup').style.display='none'
    document.querySelector('.theme-customize').style.display='none'
    document.querySelector('.notification-box').style.display='none'
});



//..................start aside................
let menuItem = document.querySelectorAll('.menu-item');

//active remove..............
const removeActive = ()=>{
    menuItem.forEach(item=>{
        item.classList.remove('active')
    })
}

menuItem.forEach(item=>{
    item.addEventListener('click',()=>{
        removeActive();
        item.classList.add('active');
        document.querySelector('.notification-box').style.display='none'
    })
})
//.................notification-box........
document.querySelector('#Notify-box').addEventListener('click',()=>{
    document.querySelector('.notification-box').style.display='block'
    document.querySelector('#ntcounter1').style.display='none'
})
//............messages......................
document.querySelector('#messageMenu').addEventListener('click',()=>{
    document.querySelector('#notfycounter2').style.display='none'
    document.querySelector('.messages').classList.toggle(boxshadow1);
    etTimeout(()=>{
        document.querySelector('.messages').classList.remove('boxshadow1');
    },3000);
    
})


//..............start firend request............
let Accept = document.querySelectorAll('#Accept');
let Delete = document.querySelectorAll('#Delete');

Accept.forEach(accept=>{
    accept.addEventListener('click',()=>{
        accept.parentElement.style.display='none'
        accept.parentElement.parentElement.querySelector('.alert').style.display='block'
    })
});
Delete.forEach(deletee=>{
    deletee.addEventListener('click',()=>{
        deletee.parentElement.parentElement.style.display ='none'
    })
})




// ...................start proflie popup...............


document.querySelectorAll('#my-profile-picture').forEach(AllProfile => {
    AllProfile.addEventListener('click',()=>{
        document.querySelector('.profile-popup').style.display='flex'

    })
});
document.querySelectorAll('.close').forEach(AllCloser=>{
    AllCloser.addEventListener('click',()=>{
        document.querySelector('.profile-popup').style.display='none'
        document.querySelector('.add-post-popup').style.display='none'
        document.querySelector('.theme-customize').style.display='none'
    })
});

document.querySelector('#profile-upload').addEventListener('change',()=>{
    document.querySelectorAll('#my-profile-picture img').forEach(AllMyProfileImg=>{
        AllMyProfileImg.src = URL.createObjectURL(document.querySelector('#profile-upload').files[0])
    })
});
//................................start add post popup.........................

document.querySelector('#crate-lg').addEventListener('click',()=>{
    document.querySelector('.add-post-popup').style.display='flex'

});
document.querySelector('#feed-pic-upload').addEventListener('change',()=>{
    document.querySelector('#postimg').src = URL.createObjectURL(document.querySelector('#feed-pic-upload').files[0]);
})
//................................start add story .........................

document.querySelector('#add-story').addEventListener('change',()=>{
    document.querySelector('.story img').src = URL.createObjectURL(document.querySelector('#add-story').files[0]);
    document.querySelector('.add-story').style.display='none'
});
//................mini button  input.....................
document.querySelector('.mini-button').addEventListener('click',()=>{
    document.querySelector('.input-post').classList.toggle('boxshadow1');
    setTimeout(()=>{
        document.querySelector('.input-post').classList.remove('boxshadow1');
    }, 3000);
});
document.querySelector('.mini-button').addEventListener('dblclick',()=>{
    document.querySelector('.add-post-popup').style.display='flex'
});
//...............liked button.....................
document.querySelectorAll('.action-button span:first-child i').forEach(liked=>{
    liked.addEventListener('click',()=>{
        liked.classList.toggle('liked');
    })
})

//..............theme customize...............
document.querySelector('#theme').addEventListener('click',()=>{
    document.querySelector('.theme-customize').style.display='flex'
});
//........................font size............
let fontSize = document.querySelectorAll('.choose-size span');
fontSize.forEach(size=>{
    let fontsize;

 size.addEventListener('click',()=>{
    if(size.classList.contains('font-size-1')){
        fontSize='10PX';
    }else if(size.classList.contains('font-size-2')){
        fontsize='13px';
    }else if(size.classList.contains('font-size-3')){
        fontsize='16px';
    }else if(size.classList.contains('font-size-4')){
        fontsize='19px';
    }else if(size.classList.contains('font-size-5')){
        fontsize='22px';
    }
     //html fontsize changes...............
     document.querySelector('html').style.fontSize = fontSize
})
    //html fontsize changes...............


})





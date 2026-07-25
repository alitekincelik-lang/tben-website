
const body=document.body;
const langBtn=document.getElementById('langBtn');
const saved=localStorage.getItem('tbenLang')||'en';
if(saved==='tr') body.classList.add('tr');
function updateLang(){
  const tr=body.classList.contains('tr');
  document.documentElement.lang=tr?'tr':'en';
  if(langBtn) langBtn.textContent=tr?'EN':'TR';
}
updateLang();
langBtn?.addEventListener('click',()=>{
  body.classList.toggle('tr');
  localStorage.setItem('tbenLang',body.classList.contains('tr')?'tr':'en');
  updateLang();
});
document.getElementById('menuBtn')?.addEventListener('click',()=>document.querySelector('nav')?.classList.toggle('open'));
document.querySelectorAll('nav a').forEach(a=>a.addEventListener('click',()=>document.querySelector('nav')?.classList.remove('open')));
const cookie=document.getElementById('cookie');
if(cookie && !localStorage.getItem('tbenCookie')) cookie.classList.add('show');
document.getElementById('acceptCookie')?.addEventListener('click',()=>{localStorage.setItem('tbenCookie','accepted');cookie.classList.remove('show')});
document.querySelectorAll('form').forEach(form=>{
  form.addEventListener('submit',()=>{
    const btn=form.querySelector('button[type=submit]');
    if(btn){btn.disabled=true;btn.textContent=body.classList.contains('tr')?'Gönderiliyor...':'Sending...'}
  });
});

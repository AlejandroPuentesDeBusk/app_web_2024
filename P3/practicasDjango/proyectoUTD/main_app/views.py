from django.shortcuts import render

# Create your views here.

def index(request):
    return render(request,'main_app/index.html',{
        'title':'Inicio Pagina principal',
        'content': '.:!Bienvenido jefe:.' 
    })

def about(request):
    return render(request, 'main_app/about.html',{
        'title':'Acerca de',
        'content':'.:Somos un equipo de desarrollo de software con DJango:.'
    })

def mision(request):
    return render(request, 'main_app/mision.html',{
        'title':'mision',
        'content': ''


    })

def vision(request):
    return render(request, 'main_app/vision.html',{
        'title':'vision',
        'content': ''


    })
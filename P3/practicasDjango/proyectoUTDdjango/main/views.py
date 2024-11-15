from django.shortcuts import render, HttpResponse, redirect
from django.http import Http404

# Create your views here.

def index(request):
    return render(request, 'main/index.html',{
        'title': 'inicio',
        'content': 'BIenvenido a mi pagina de inicio'
    })

def about(request):
    return render(request, 'main/about.html',{
        'title': 'Acerca de',
        'content':'.:Somos un equipo de desarrollo de software multiplataforma con django'
    })

def mision(request):
    return render(request, 'main/mision.html',{
        'title': 'Mision',
        
    })


def vision(request):
    return render(request, 'main/vision.html',{
        'title': 'Vision',    
    })


def error404_2(request, exception):
    return render(request, 'main/404.html')




#3def custom_404(request, exception):
#    return redirect('index')


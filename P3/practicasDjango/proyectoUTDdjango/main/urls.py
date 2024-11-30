#URLS DAGO VAN TODAS


from django.urls import path
from . import views
from django.contrib.auth import views as auth_views


urlpatterns = [
    path('', views.index, name='index'),
    path('about/', views.about, name='about'),
    path('mision/', views.mision, name='mision'),
    path('vision/', views.vision, name='vision'),
    path('registro/', views.registro, name='registro'),
    path('inicio/', views.login_user, name='inicio'),
    path('logout/', views.logout_user, name='logout'),
    path('404/', views.error404, name='404')

]


handler404 = 'error404'



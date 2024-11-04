import re
from django.http.response import HttpResponseRedirect
from django.shortcuts import render
from django.http import HttpResponse
from .models import Book
from django.urls import reverse

def index(request):
    return render(request, "index.html")
    
def books_index(request):
    context = {
        'books_books': Book.objects.all()
    }
    return render(request, "books/index.html", context)
    
def add(request):
    return render(request, "books/form.html")

def save(request):
    buku = Book(
        judul =  request.POST['judul'],
        publish = request.POST['publish']
    )
    buku.save()
    return HttpResponseRedirect(reverse('books.index'))


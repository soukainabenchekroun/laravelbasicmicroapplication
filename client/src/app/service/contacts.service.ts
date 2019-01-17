import { Injectable } from '@angular/core';
import { HttpClient, HttpParams, HttpHeaders } from "@angular/common/http";

import { Observable } from 'rxjs';
import { catchError } from 'rxjs/operators';

import { Contact } from '../interface/contact';
import { HttpErrorHandler, HandleError } from '../http-error-handler.service';


@Injectable({
  providedIn: 'root'
})
export class ContactsService {

  private handleError: HandleError;

  constructor(private http: HttpClient, httpErrorHandler: HttpErrorHandler) {
    this.handleError = httpErrorHandler.createHandleError('ContactsService')
  }

  getContacts(): Observable<Contact[]> {
    return this.http
      .get<Contact[]>('api/contacts')
      .pipe(catchError(this.handleError('getContacts', [])))
  }

  addContact(contact: Contact): Observable<Contact> {
    return this.http
      .post<Contact>('api/contact', contact)
      .pipe(catchError(this.handleError('addContact', contact)))
  }

  deleteContact(id: number): Observable<{}> {
    let url = `api/contact/${id}`;
    return this.http
      .delete(url)
      .pipe(catchError(this.handleError('deleteContact')))
  }

  updateContact(contact: Contact): Observable<Contact> {
    return this.http
      .put<Contact>(`api/contact/${contact.id}`, contact)
      .pipe(catchError(this.handleError('updateContact', contact)))
  }
}

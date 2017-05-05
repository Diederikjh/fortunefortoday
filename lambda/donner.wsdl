<?xml version="1.0" encoding="utf-8"?>
<wsdl:definitions xmlns:s="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://schemas.xmlsoap.org/wsdl/soap12/" xmlns:mime="http://schemas.xmlsoap.org/wsdl/mime/" xmlns:tns="http://cdonner.kicks-ass.org:8080/" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:tm="http://microsoft.com/wsdl/mime/textMatching/" xmlns:http="http://schemas.xmlsoap.org/wsdl/http/" xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/" targetNamespace="http://cdonner.kicks-ass.org:8080/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/">
  <wsdl:types>
    <s:schema elementFormDefault="qualified" targetNamespace="http://cdonner.kicks-ass.org:8080/">
      <s:element name="GetCookie">
        <s:complexType />
      </s:element>
      <s:element name="GetCookieResponse">
        <s:complexType>
          <s:sequence>
            <s:element minOccurs="0" maxOccurs="1" name="GetCookieResult" type="s:string" />
          </s:sequence>
        </s:complexType>
      </s:element>
    </s:schema>
  </wsdl:types>
  <wsdl:message name="GetCookieSoapIn">
    <wsdl:part name="parameters" element="tns:GetCookie" />
  </wsdl:message>
  <wsdl:message name="GetCookieSoapOut">
    <wsdl:part name="parameters" element="tns:GetCookieResponse" />
  </wsdl:message>
  <wsdl:portType name="FortuneCookieSoap">
    <wsdl:operation name="GetCookie">
      <wsdl:input message="tns:GetCookieSoapIn" />
      <wsdl:output message="tns:GetCookieSoapOut" />
    </wsdl:operation>
  </wsdl:portType>
  <wsdl:binding name="FortuneCookieSoap" type="tns:FortuneCookieSoap">
    <soap:binding transport="http://schemas.xmlsoap.org/soap/http" />
    <wsdl:operation name="GetCookie">
      <soap:operation soapAction="http://cdonner.kicks-ass.org:8080/GetCookie" style="document" />
      <wsdl:input>
        <soap:body use="literal" />
      </wsdl:input>
      <wsdl:output>
        <soap:body use="literal" />
      </wsdl:output>
    </wsdl:operation>
  </wsdl:binding>
  <wsdl:binding name="FortuneCookieSoap12" type="tns:FortuneCookieSoap">
    <soap12:binding transport="http://schemas.xmlsoap.org/soap/http" />
    <wsdl:operation name="GetCookie">
      <soap12:operation soapAction="http://cdonner.kicks-ass.org:8080/GetCookie" style="document" />
      <wsdl:input>
        <soap12:body use="literal" />
      </wsdl:input>
      <wsdl:output>
        <soap12:body use="literal" />
      </wsdl:output>
    </wsdl:operation>
  </wsdl:binding>
  <wsdl:service name="FortuneCookie">
    <wsdl:port name="FortuneCookieSoap" binding="tns:FortuneCookieSoap">
      <soap:address location="http://donnerhome.com:8080/FortuneCookieWS/CookieSvc.asmx" />
    </wsdl:port>
    <wsdl:port name="FortuneCookieSoap12" binding="tns:FortuneCookieSoap12">
      <soap12:address location="http://donnerhome.com:8080/FortuneCookieWS/CookieSvc.asmx" />
    </wsdl:port>
  </wsdl:service>
</wsdl:definitions>

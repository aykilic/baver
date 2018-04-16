<?php
/**
 * Created by PhpStorm.
 * User: ayk
 * Date: 6.08.2017
 * Time: 03:26
 */

namespace App\Http\Controllers\Auth;


class değişken
{
   /** Function fidbulp(ByVal QueryId As Integer, ByVal QueryTable As String, ByVal Querycolumn As String, ByVal QueryReturn As String) As String

        Dim connection As Data.SqlClient.SqlConnection = Nothing

        Dim command As New Data.SqlClient.SqlCommand

        Dim dr As Data.SqlClient.SqlDataReader

        Dim result As String = Nothing

        Try

            connection = getConnection()

            connection.Open()
            'command.CommandText = "SELECT customer FROM irsaliyeler where irno=@sipfisid"
            command.CommandText = "SELECT " + QueryReturn + " FROM " + QueryTable + " where " + Querycolumn + " =@QueryId"

            command.Parameters.Add("@QueryId", Data.SqlDbType.Int).Value = QueryId

            command.Connection = connection

            dr = command.ExecuteReader()

            dr.Read()

            result = dr.Item(QueryReturn)

            Return result

        Finally

            If Not IsNothing(connection) Then

                If connection.State = ConnectionState.Open Then

                    connection.Close()

                End If

                connection = Nothing

            End If

        End Try

    End Function
    Function irnoilefidbul(ByVal QueryId As Integer, ByVal QueryTable As String, ByVal Querycolumn As String, ByVal QueryReturn As String) As String

        Dim connection As Data.SqlClient.SqlConnection = Nothing

        Dim command As New Data.SqlClient.SqlCommand

        Dim dr As Data.SqlClient.SqlDataReader

        Dim result As String = Nothing

        Try

            connection = getConnection()

            connection.Open()
            'command.CommandText = "SELECT customer FROM irsaliyeler where irno=@sipfisid"
            command.CommandText = "SELECT " + QueryReturn + " FROM " + QueryTable + " where " + Querycolumn + " =@QueryId"

            command.Parameters.Add("@QueryId", Data.SqlDbType.Int).Value = QueryId

            command.Connection = connection

            dr = command.ExecuteReader()

            dr.Read()

            result = dr.Item(QueryReturn)

            Return result

        Finally

            If Not IsNothing(connection) Then

                If connection.State = ConnectionState.Open Then

                    connection.Close()

                End If

                connection = Nothing

            End If

        End Try

    End Function
Function sipfisidbul(ByVal irno As Integer) As String

        Dim connection As Data.SqlClient.SqlConnection = Nothing
        Dim command As New Data.SqlClient.SqlCommand
        Dim dr As Data.SqlClient.SqlDataReader
        Try


            connection = getConnection()
            connection.Open()

            command.CommandText = "SELECT siparisstok FROM siparisstok where irno=@irno"
            command.Parameters.Add("@irno", Data.SqlDbType.Int).Value = irno

            command.Connection = connection
            dr = command.ExecuteReader()
            dr.Read()

            Return dr.Item("sipfisno")

        Finally

            If Not IsNothing(connection) Then
                If connection.State = ConnectionState.Open Then
                    connection.Close()
                End If
                connection = Nothing
            End If

        End Try

    End Function
Function sipnobul() As Integer

        Dim connection As Data.SqlClient.SqlConnection = Nothing
        Dim command As New Data.SqlClient.SqlCommand
        Dim dr As Data.SqlClient.SqlDataReader

        Try

            connection = getConnection()
            connection.Open()

            command.CommandText = "SELECT TOP 1 *  FROM siparisfisi order by sipfisid desc "

            command.Connection = connection
            dr = command.ExecuteReader()

            If dr.Read() Then


                Return dr.Item("sipno")


            End If


        Finally

            If Not IsNothing(connection) Then
                If connection.State = ConnectionState.Open Then
                    connection.Close()
                End If
                connection = Nothing
            End If

        End Try
    End Function

Function checkdeposuz(ByVal irno As Integer) As Boolean
        Dim connection As Data.SqlClient.SqlConnection = Nothing
        Dim command As New Data.SqlClient.SqlCommand
        Try
            connection = getConnection()
            connection.Open()

            command.CommandText = "SELECT count(*) FROM siparisfisi WHERE irno=@irno "
            command.Parameters.Add("@irno", Data.SqlDbType.Int).Value = irno

            command.Connection = connection

            Dim RecordCount As String = command.ExecuteScalar()
            If RecordCount = 0 Then
                Return False
            Else
                Return True
            End If
        Finally

            If Not IsNothing(connection) Then
                If connection.State = ConnectionState.Open Then
                    connection.Close()
                End If
                connection = Nothing
            End If

        End Try

    End Function
Function sipfisivarsa(ByVal irno As Integer) As Boolean
        Dim connection As Data.SqlClient.SqlConnection = Nothing
        Dim command As New Data.SqlClient.SqlCommand
        Try
            connection = getConnection()
            connection.Open()

            command.CommandText = "SELECT count(*) FROM siparisfisi  WHERE irno=@irno "
            command.Parameters.Add("@irno", Data.SqlDbType.Int).Value = irno

            command.Connection = connection

            Dim RecordCount As String = command.ExecuteScalar()
            If RecordCount = 0 Then
                Return False
            Else
                Return True
            End If
        Finally

            If Not IsNothing(connection) Then
                If connection.State = ConnectionState.Open Then
                    connection.Close()
                End If
                connection = Nothing
            End If

        End Try

    End Function
Function getirsaliyeList() As System.Data.DataTable
        Dim connection As Data.SqlClient.SqlConnection = Nothing
        Dim command As New Data.SqlClient.SqlCommand

        Try

            connection = getConnection()
            connection.Open()

            command.CommandText = "SELECT f.fid, f.cunvan, p.irtarih,  p.irno, p.customer,p.total,d.* FROM irsaliyeler p,firmalar f,fisdurum d where d.durumid=p.irsdurum and f.fid = p.customer   order by irno desc"

            command.Connection = connection

            Dim myDataTable As DataTable = New DataTable()

            Dim myAdapter As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(command)

            myAdapter.Fill(myDataTable)

            Return myDataTable

        Finally

            If Not IsNothing(connection) Then
                If connection.State = ConnectionState.Open Then
                    connection.Close()
                End If
                connection = Nothing
            End If

        End Try
    End Function
Function iboooooooo() As Boolean

        Dim connection As Data.SqlClient.SqlConnection = Nothing
        Dim command As New Data.SqlClient.SqlCommand


        Try

            connection = getConnection()
            connection.Open()

            command.CommandText = "UPDATE firmalar set kalancari=0,kalancariusd=0,devir=0,devirusd=0,fiilicari=0,fiilicariusd=0,devirfiili=0,devirfiiliusd=0 "
            command.Connection = connection
            command.ExecuteScalar()
            command.CommandText = "UPDATE stoklar set kalanstok=0,devir=0,fiilistok=0,fiilidevir=0 "
            command.Connection = connection
            command.ExecuteScalar()
            command.CommandText = "Delete from siparisfisi "
            command.Connection = connection
            command.ExecuteNonQuery()
            command.CommandText = "Delete from siparisstok "
            command.Connection = connection
            command.ExecuteNonQuery()
            command.CommandText = "Delete from irsaliyeler "
            command.Connection = connection
            command.ExecuteNonQuery()


            Return True

        Finally

            If Not IsNothing(connection) Then
                If connection.State = ConnectionState.Open Then
                    connection.Close()
                End If
                connection = Nothing
            End If

        End Try
    End Function
    'ilLbl.Text = getData(adress1, "tbl_il", "il_id", "il_ad")

    'Function getData(ByVal QueryId As Integer, ByVal QueryTable As String, ByVal Querycolumn As String, ByVal QueryReturn As String) As String

    '    Dim connection As Data.SqlClient.SqlConnection = Nothing

    '    Dim command As New Data.SqlClient.SqlCommand

    '    Dim dr As Data.SqlClient.SqlDataReader

    '    Dim result As String = Nothing

    '    Try

    '        connection = getConnection()

    '        connection.Open()

    '        command.CommandText = "SELECT " + QueryReturn + " FROM " + QueryTable + " where " + Querycolumn + " =@QueryId"

    '        command.Parameters.Add("@QueryId", Data.SqlDbType.Int).Value = QueryId

    '        command.Connection = connection

    '        dr = command.ExecuteReader()

    '        dr.Read()

    '        result = dr.Item(QueryReturn)

    '        Return result

    '    Finally

    '        If Not IsNothing(connection) Then

    '            If connection.State = ConnectionState.Open Then

    '                connection.Close()

    '            End If

    '            connection = Nothing

    '        End If

    '    End Try

    'End Function

    'ibo'''''''''''''
    */
}
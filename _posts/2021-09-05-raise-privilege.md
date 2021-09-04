---
layout:     post
title:      Raise Own Privilege
subtitle:   C++
date:       2021-09-05
author:     WALKer
header-img: img/post-bg-alibaba.jpg
catalog: false
tags:
    - 平平无奇
---

void EnableDebugPriv() 
   {      

    HANDLE hToken;      

    LUID sedebugnameValue;      

    TOKEN_PRIVILEGES tkp; 

    OpenProcessToken(GetCurrentProcess(), TOKEN_ADJUST_PRIVILEGES | TOKEN_QUERY, &hToken); 

    LookupPrivilegeValue(NULL, SE_DEBUG_NAME, &sedebugnameValue); 

    tkp.PrivilegeCount = 1;      

    tkp.Privileges[0].Luid = sedebugnameValue;      

    tkp.Privileges[0].Attributes = SE_PRIVILEGE_ENABLED; 

    AdjustTokenPrivileges(hToken, false, &tkp, sizeof tkp, NULL, NULL); 

    CloseHandle(hToken);  
} 
